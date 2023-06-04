<x-app-layout>
<div class="card">
    <div class="card-body">
    hello!
    </div>
</div>
<form method="post" action="/inventory/category/add-post">
    @csrf
    <div class "form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"required>

    </div>
<div class="form-group">
    <label class="form-group">code</label>
    <input type="text" name="code" class="form-control" required>
</div>
<div class+"form_group>
<button class="btn btn-success">
save
</button>
</form>
</div>
</div>
</x-app-layout>