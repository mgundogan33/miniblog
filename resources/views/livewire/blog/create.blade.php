<div class="card">
    <div class="card-header">
        Blog Oluştur
    </div>
    <div class="card-body">
        <form wire:submit.prevent='kaydet'>
            <!-- Name input -->
            <strong>Başlık</strong>
            <div class="form-outline mb-4">
                <input type="text" wire:model='title' id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1"></label>
                @error('title') <span class="error">{{$message}}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="form-label" for="customFile"><strong>Fotoğraf Yükle</strong></label><br>
                <input type="file" wire:model='photo' class="form-control" id="customFile">
                @error('photo') <span class="error">{{$message}}</span>@enderror
            </div>

            <!-- Message input -->
            <strong>Metin</strong>
            <div class="form-outline mb-4">
                <textarea class="form-control" wire:model='text' id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3"></label>
                @error('text') <span class="error">{{$message}}</span>@enderror
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Kaydet</button>
        </form>
    </div>
</div>
