<div class="container mt-5">
    <div class="card shadow-md border-0 rounded-lg">
        <div class="card-header bg-gradient-to-r from-blue-500 to-blue-700 text-black text-center">
            <h4 class="m-0">Profile Information</h4>
        </div>
        <div class="card-body bg-light p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">First Name</label>
                        <input type="text" name="first_name" class="form-control rounded" placeholder="Enter first name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control rounded" placeholder="Enter middle name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Last Name</label>
                        <input type="text" name="last_name" class="form-control rounded" placeholder="Enter last name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Birth Date</label>
                        <input type="date" name="birth_date" class="form-control rounded">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Age</label>
                        <input type="number" name="age" class="form-control rounded" placeholder="Enter age">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Degree</label>
                        <input type="text" name="degree" class="form-control rounded" placeholder="Enter degree">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">City</label>
                        <input type="text" name="city" class="form-control rounded" placeholder="Enter city">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Freelance Availability</label>
                        <select name="freelance" class="form-control rounded">
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Profile Image</label>
                        <input type="file" name="personal_image" class="form-control rounded">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Title</label>
                        <input type="text" name="title" class="form-control rounded" placeholder="Enter your title">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">About</label>
                        <textarea name="about" class="form-control rounded" rows="3" placeholder="Tell us about yourself"></textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-100 shadow-sm">
                        Save Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
