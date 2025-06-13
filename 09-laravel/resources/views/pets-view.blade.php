<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>List all Pets</title>
</head>
<body class="bg-blue-300 min-h-[100dvh] flex flex-col gap-4 justify-center">
    <h1 class="text-4xl text-white pb-4 border">List All pets</h1>
    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>

        </th>
        <th class="">Name</th>
        <th class="">kind</th>
        <th class="">Breed</th>
        <th class="">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pets as $pet)
            
            <!-- row 1 -->
            <tr>
                <th>

                </th>
                <td>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                        <img
                        src="{{asset('images/'.$pet->image)}}"
                        alt="{{$pet->name}}" />
                    </div>
                    </div>
                    <div>
                    <div class="font-bold">{{$pet->name}}</div>
                    <div class="text-sm opacity-50">{{$pet->location}} </div>
                    </div>
                </div>
                </td>
                <td>
                {{$pet->kind}}
                <br />
                <span class="badge badge-ghost badge-sm">{{$pet->breed}}</span>
                </td>
                <td>Purple</td>
                <th>
                <a href="{{ url('petsview/'.$pet->id) }}" class="btn btn-ghost btn-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </a>
                </th>
            </tr>
        @endforeach

    </tbody>
  </table>
</div>
</body>
</html>