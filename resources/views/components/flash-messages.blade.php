@if($message = Session::get("success"))
<div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
    <span class="text-xl inline-block mr-5 align-middle">
        <i class="fas fa bell"></i>
    </span>
    <span class="inline-block align-middle mr-8">
        <b class="capitalize">{{ $message }}</b>
    </span>
</div>
@endif