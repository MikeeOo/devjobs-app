@extends('layouts.default')

@section('content')
<h1 class="text-3xl text-center font-bold py-6 uppercase">Manage Gigs</h1>
<div class="mx-4">
    <div class="mx-auto w-full max-w-screen-md overflow-x-auto">
        <table class="table">
            <tr>
                <th>Type</th>
                <th>Where</th>
                <th>Description</th>
            </tr>
            <tbody>
            <tr>
                <td class="text-lg"><a href="/" class="link link-underline-hover">Laravel Senior Developer</a></td>
                <td class="text-lg"><a href="/" class="btn btn-solid-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Edit</a></td>
                <td class="text-lg">
                    <form action="">
                        <button class="btn btn-solid-error"><i class="fa-solid fa-trash-can pr-1"></i>Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-lg"><a href="/" class="link link-underline-hover">Laravel Senior Developer</a></td>
                <td class="text-lg"><a href="/" class="btn btn-solid-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Edit</a></td>
                <td class="text-lg">
                    <form action="">
                        <button class="btn btn-solid-error"><i class="fa-solid fa-trash-can pr-1"></i>Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-lg"><a href="/" class="link link-underline-hover">Laravel Senior Developer</a></td>
                <td class="text-lg"><a href="/" class="btn btn-solid-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Edit</a></td>
                <td class="text-lg">
                    <form action="">
                        <button class="btn btn-solid-error"><i class="fa-solid fa-trash-can pr-1"></i>Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-lg"><a href="/" class="link link-underline-hover">Laravel Senior Developer</a></td>
                <td class="text-lg"><a href="/" class="btn btn-solid-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Edit</a></td>
                <td class="text-lg">
                    <form action="">
                        <button class="btn btn-solid-error"><i class="fa-solid fa-trash-can pr-1"></i>Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-lg"><a href="/" class="link link-underline-hover">Laravel Senior Developer</a></td>
                <td class="text-lg"><a href="/" class="btn btn-solid-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Edit</a></td>
                <td class="text-lg">
                    <form action="">
                        <button class="btn btn-solid-error"><i class="fa-solid fa-trash-can pr-1"></i>Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
