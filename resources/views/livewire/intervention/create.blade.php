@if (Auth::user()->role == 'admin')
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Int debut</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"
            wire:model="int_debut">
        @error('int_debut')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Int emp nss</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"
            wire:model="int_emp_nss">
        @error('int_emp_nss')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Int par id</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="int_par_id">
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Int nb jrs</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="int_nb_jrs">
        @error('int_nb_jrs')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <button wire:click.prevent="store()" class="btn btn-primary">Save</button>
</form>
@endif
