@section('title')
    Edit Existing User
@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@section('content-header')
<x-content-header>
    Edit Existing User
</x-content-header>
@endsection

<x-savings.content>
    <x-slot name="card_header">
        <h3 class="card-title">Edit Existing User</h3>
        <a href="{{ route('users.index') }}" class="float-right">Back</a>
    </x-slot>

    <x-slot name="card_body">
        <form method="POST" wire:submit.prevent="update">
            @csrf

            <x-inputs.email
                key="user.email"
                placeholder="{{ trans('validation.attributes.email') }}"
                autofocus
                required="required"
            />

            <x-inputs.dropdown
                key="user.role_id"
                :options="$roles"
                textField="name"
                required="required"
            />

            <select class="myselect" style="width:500px;">
                <option>Select City</option>
               @foreach($cities as $city)
                <option value={{ $city->id}}>{{ $city->city }}</option>
               @endforeach
            </select>

            <div class="row">
                <div class="offset-8 col-4">
                    <x-inputs.button text="Save" class="btn-success" />
                </div>
            </div>
        </form>

    </x-slot>
</x-savings.content>
<script type="text/javascript">
    $(".myselect").select2();
</script>
