{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agricultures') }}
        </h2>
    </x-slot>
    @if ($isOpen)
        @include('livewire.agriculteur.update')
    @else
        @include('livewire.agriculteur.create')
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Agr_id</th>
                <th>Agr_nom</th>
                <th>Agr_prenom</th>
                <th>Agr_resid</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agriculteur as $value)
                <tr>
                    <td>{{ $value->agr_id }}</td>
                    <td>{{ $value->agr_nom }}</td>
                    <td>{{ $value->agr_prn }}</td>
                    <td>{{ $value->agr_resid }}</td>
                    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                            <button wire:click="edit({{ $value->agr_id }})"
                                class="btn btn-primary btn-sm ">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ $value->agr_id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
