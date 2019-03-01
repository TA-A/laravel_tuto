<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">

            <label class="label" for="title">Project title</label>

            <div class="control">

            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" value="{{ old('title') }}" required>

            </div>

        <div>


        <div class="field">

            <label class="label" for="description">Project Description</label>

            <div class="control">

                <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : ''}}" id="" cols="30" rows="10" required>{{ old('description') }}</textarea>

            </div>

        <div>


        <div class="field">

            <div class="control">

                <button type="submit">Create Project</button>

            </div>

        </div>

        @include('errors')

        {{-- @if ($errors->any())

            <div class="notification is-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>
                    
                    @endforeach

                </ul>
            
            </div>

        @endif --}}

    </form>

</body>
</html>