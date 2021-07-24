<div class="my-3">
    <input type="text" class="foam-control w-50 @error('name') is-invalid @enderror" name="name" id="name"
           placeholder="Name" value="{{old('name',isset($NewTable)?$NewTable->name:'')}}" required autocomplete="name" autofocus>
    @error('name')
    <div class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="my-3">
    <input type="text" class="foam-control w-50 @error('email') is-invalid @enderror"
           value="{{old('email',isset($NewTable)?$NewTable->email:'')}}" required autocomplete="email" autofocus name="email" id="email" placeholder="Email">
    @error('email')
    <div class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="my-3">
    <input type="text" class="foam-control w-50 @error('phone') is-invalid @enderror"
           value="{{old('phone',isset($NewTable)?$NewTable->phone:'')}}" required autocomplete="phone" autofocus name="phone" id="phone" placeholder="Phone">

    @error('phone')
    <div class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="my-3">
    <label for="thumbnail" class="foam-label w-50" ></label>
    <input type="file" class="foam-control w-50 @error('thumbnail') is-invalid @enderror"
           value="{{old('thumbnail')}}" required  autofocus name="thumbnail" id="thumbnail" >
    @error('phone')
    <div class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="my-3">
    <button type="submit" class="btn btn-primary">Save Record</button>
</div>
