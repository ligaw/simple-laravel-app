<x-layout>
  <x-slot name="title">User List</x-slot>
  <a href="#" class="btn btn-success mb-2">Add User</a>
  <table class="table table-bordered">
      <thead>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td><a href="#" class="btn btn-warning">Edit</a></td>
              <td><a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
      @endforeach
      </tbody>
  </table>
</x-layout>
