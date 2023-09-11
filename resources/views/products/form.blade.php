
<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="phone">Phone</label>
        <input type="number" step=".01" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" max="999999999999"
               value="{{isset($product) ? number_format($product->phone) : old('phone')}}" >
        @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="description">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <div class="custom-file">

            <form action="/products" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" />
                <div class="form-group mb-1">
                <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <button onclick="clearImage()" class="btn btn-danger mt-3">Clear image</button>
        </div>
    </div>
</form>

@section('script')
    <script>
        function preview() {
            picturePreview.src = URL.createObjectURL(event.currentTarget.files[0]);
        }

        function clearImage() {
            event.preventDefault();
            customFile.value = null;
            picturePreview.src = '';
            picturePreview.alt = '';
        }
    </script>
@endsection
