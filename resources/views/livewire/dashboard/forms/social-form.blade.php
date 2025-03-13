<form wire:submit.prevent='submit'>
    @csrf
    <div class="card">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card-header">
            <h4 class="card-title">Add Social Media Account</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Account Name</label>
                <input type="text" id="name" wire:model='name' class="form-control" placeholder="Enter Account name">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">Account URL</label>
                <input type="text" id="url" wire:model='url' class="form-control" placeholder="Enter Account URL">
                @error('url')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon">Account Icon</label>
                <input type="text" id="icon" wire:model='icon' class="form-control" placeholder="Enter Account Icon">
                @error('icon')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save Account</button>
        </div>
    </div>
</form>
