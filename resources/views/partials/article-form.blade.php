<label for="title" >title:</label><br>
<input type="text"  name= "title" value = "{{ old('title', isset($article->title) ? $article->title : null) }}"> <br>
<label for="body" >body:</label><br>
<input type="text" name= "body" value = "{{ old('body', isset($article->body) ? $article->body : null) }}"> <br>
<label for="image"></label>
<input type="file" name="image" id="image">
<button type= "submit">Valider</button>
