<form method="POST" action="{{route('page.update',$page->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$page->name}}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$page->email}}" required>
    </div>
    <button type="submit" class="btn-btn-primary">update</button>
</form>