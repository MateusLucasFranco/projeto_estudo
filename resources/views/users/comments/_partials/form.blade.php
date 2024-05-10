@csrf
<div class="input-group">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-comments"></i></span>
    <textarea class="form-control" name="body" id="floatingTextarea" cols="30" rows="10" placeholder="Deixe um comentário aqui" style="height: 50px; width: 800px;">{{$comment->body ?? old('body')}}</textarea>
    
    <label for="visible" class="ps-2 mt-2 mb-1">
        <input type="checkbox" name="visible" 
            @if(isset($comment) && $comment->visible)
                checked="checked"
            @endif
        >
        Visível?
    </label>
</div>

<button class="btn btn-outline-primary"><i class="fas fa-save"></i> Enviar</button>