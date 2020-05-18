<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" vakue="{{csrf_token()}}">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body >
<div id="app">
    <div class="container ">
        <div class="row" style="padding: 50px 0;">
{{--            <div class="col-sm">--}}
{{--                <aside>--}}
{{--                    <form action="/users" class="form-inline">--}}
{{--                        <div class="form-group col-md-3">--}}
{{--                            <label for="name" class="">Name</label>--}}
{{--                            <input type="text" name="name" id="name" class="form-control" value="{{request()->name}}">--}}
{{--                        </div>--}}

{{--                        <div class="form-group col-md-3">--}}
{{--                            <label for="birthday" class="">Bi rthday</label>--}}
{{--                            <input type="text" name="birthday" id="birthday" class="form-control" value="{{request()->birthday}}">--}}
{{--                        </div>--}}


{{--                        <div class="form-group col-md-2">--}}
{{--                            <label for="gender" class="">Gender</label>--}}
{{--                            <select name="gender" id="gender">--}}
{{--                                <option value="1" {{ request()->gender == '1' ? 'selected' : ''}}>Male</option>--}}
{{--                                <option value="2" {{ request()->gender == '2' ? 'selected' : ''}}>Female</option>--}}
{{--                            </select>--}}

{{--                        </div>--}}


{{--                        <div class="form-group col-md-2">--}}
{{--                            <label for="is_active" class="">Is active</label>--}}

{{--                            <label for="is_active" class="">Yes</label>--}}
{{--                            <input type="radio" name="is_active" id="is_active" value="1" class="form-control" {{request()->is_active == 1 ? 'checked' : false}}>--}}
{{--                            <label for="is_not_active" class="">No</label>--}}
{{--                            <input type="radio" name="is_active" id="is_not_active" value="0" class="form-control" {{! request()->is_active  ? 'checked' : false}}>--}}
{{--                        </div>--}}


{{--                        <div class="form-group col-md-2">--}}
{{--                        <button type="submite" class="btn btn-primary">Filter</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <br>--}}
{{--                </aside>--}}
{{--            </div>--}}

            <div class="col-sm">
                <users-list></users-list>

{{--                <table class="table table-striped">--}}
{{--                    <thead>--}}
{{--                        <tr>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col">Birthday</th>--}}
{{--                            <th scope="col">Gender</th>--}}
{{--                            <th scope="col">Is active</th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <tr>--}}
{{--                            <td>{{$user->name}}</td>--}}
{{--                            <td> {{$user->info->birthday}}</td>--}}
{{--                            <td> {{$user->gender == '1' ? 'male' : 'femail'}}</td>--}}
{{--                            <td class="card-text">{{$user->is_active ? 'Yes' : 'No'}}</td>--}}

{{--                        </tr>--}}
{{--                     @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
            </div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>