<div class="table-responsive table-full-width">
    {{-- <div x-data="{ open: false }">
        <!-- Button to Open Modal -->
        <button @click="open = true" class="btn btn-primary" data-toggle="modal" data-target="#socialMediaModal">
            Add Social Media
        </button> --}}

        <!-- Table Displaying Social Media Accounts -->
        <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Url</th>
                <th>Icon</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                <tr>
                    <td>{{ $account->name }}</td>
                    <td><a href="{{ $account->url }}" target="_blank">{{ $account->url }}</a></td>
                    <td><i class="{{ $account->icon }}"></i></td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                        <button class="btn btn-warning btn-sm">Update</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <livewire:dashboard.social-form />


        <!-- Bootstrap Modal (Popup Form) -->
        <div class="modal fade" id="socialMediaModal" tabindex="-1" role="dialog" aria-labelledby="socialMediaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Add Social Media Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>

                    <!-- Modal Body with Livewire Form -->
                    <div class="modal-body">
                    </div>


                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
