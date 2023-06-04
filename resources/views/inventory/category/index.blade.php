<x-app-layout>
    <div class="card">
        <div class="card-body">
            <a href="/inventory/category/add" class="btn btn-primary">
                Add Category
            </a>
        </div>
    </div>
    <hr />
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    name
                </th>
                <th>
                    code
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoryList as $category)
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    {{$category->code}}
                </td>
                <td>
                    <a href="/inventory/category/edit?id={{$category->id}}" class="btn btn-info">
                        edit
                    </a>
                    <a href="/inventory/category/delete?categoryId={{ $category->id }}" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </tbody>
    </table>
</x-app-layout>