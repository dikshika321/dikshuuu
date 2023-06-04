<x-app-layout>
    <div class="card">
        <div class="card-body">
            <form method="post" action="/inventory/category/edit-post">
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="form-group">
                    <label for="">
                        Name
                    </label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Code
                    </label>
                    <input type="text" name="code" value="{{$category->code}} "class="form-control" required>
                </div>
                <div class="form-group mt-2">
                <button class="btn btn-success">
                 save
                </button>

            </form>
</x-app-layout>