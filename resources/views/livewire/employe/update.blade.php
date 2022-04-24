@if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
<form>
    <div class="form-group">
        <input type="hidden" wire:model="emp_nss">
        <label for="exampleFormControlInput1">Employe nom</label>
        <input type="emp_nom" class="form-control" wire:model="emp_nom" id="exampleFormControlInput1">
        @error('emp_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Employe prenom</label>
        <input type="text" class="form-control" wire:model="emp_prn" id="exampleFormControlInput2">
        @error('emp_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Employe Tarif</label>
        <input type="text" class="form-control" wire:model="emp_tarif" id="exampleFormControlInput3">
        @error('emp_tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <button wire:click.prevent="update()" class="btn btn-danger">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-dark">Cancel</button>
</form>
@endif
