<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{Auth::user()->name}}</td>
            <td>{{Auth::user()->email}}</td>
        </tr>
    </tbody>
</table>