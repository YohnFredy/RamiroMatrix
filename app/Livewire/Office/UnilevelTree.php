<?php

namespace App\Livewire\Office;

use App\Models\ForcedMatrix;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UnilevelTree extends Component
{
    public array $tree;
    public User $currentUser;
    public int $secondaryUserId;
    public int $primaryUserId;
    public int $activo = 0;
    public $levels = 2, $selectedLevels = '';

    public function mount(): void
    {
        $this->resetTree();
    }


     public function resetTree(): void
    {
        $user = Auth::user();
        $this->currentUser = $user;

        $this->activo = (int) ($user->activation?->is_active ?? false);

        $this->primaryUserId = $this->currentUser->id;
        $this->secondaryUserId = $this->currentUser->id;
    }

    private function buildTree(User $user, int $level = 0): array
    {

        $branch = [
            'level' => $level,
            'id' => $user->id,
            'username' => $user->username,
            'children' => [],
            'direct_affiliates' => $user->matrixTotal?->direct_affiliates ?? 0,
            'total_affiliates' => $user->matrixTotal?->total_unilevel ?? 0,
        ];

        if ($level < $this->levels) {
            $branch['children'] = $this->getChildrenBranches($user->id, $level);
        }

        return $branch;
    }

    public function updatedSelectedLevels($value)
    {
        // Si el valor está vacío (opción "Niveles"), usamos un valor por defecto.
        // Si no, usamos el valor seleccionado.
        $this->levels = $value ?: 2; // Usará 4 si $value es ""
         $this->dispatch('recalculate-tree-height'); 
    }

     private function getChildrenBranches(int $parentId, int $currentLevel): array
    {
        return ForcedMatrix::where('sponsor_id', $parentId)
            ->with(['user.matrixTotal'])
            ->get()
            ->map(fn(ForcedMatrix $child) => $this->buildTree($child->user, $currentLevel + 1))
            ->toArray();
    }

    public function show(User $user): void
    {
        $this->currentUser = $user;

        if ($this->primaryUserId === $this->currentUser->id) {
            return;
        }

        if ($this->currentUser->id === $this->secondaryUserId) {
            $this->currentUser = User::findOrFail($user->matrix->sponsor_id);
            $this->secondaryUserId = $this->currentUser->id;
        } else {
            $this->secondaryUserId = $this->currentUser->id;
        }

        $this->dispatch('recalculate-tree-height');
    } 

    #[Layout('components.layouts.office')]
    public function render()
    {
         $this->tree = $this->buildTree($this->currentUser);
        return view('livewire.office.unilevel-tree');
    }
}
