<form style="display:inline" action="{{ url($model.'/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="far fa-trash-alt"></i> 削除
    </button>
</form>