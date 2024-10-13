<form action=" {{$action}}" method="{{$method}}">
@if($verb != '')
@method("{{$verb}}")
@endif
@csrf
@foreach ($controls as $control)
    <x-common.form-control :icon="$control['icon']" :label="$control['label']" :type="$control['type']"  :name="$control['name']" :placeholder="$control['placeholder']" />
@endforeach
<div class="d-flex justify-content-between mt-4">
    <button type="submit" class="btn btn-primary">Crear Autor</button>
    <a href="/author" class="btn btn-secondary">Regresar</a>
</div>
</form>
