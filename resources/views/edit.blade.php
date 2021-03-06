<!-- For Modal Edit -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Edit your post</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="modal-error-alert" style="display: none">
                </div>
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="modal-title" minlength="5"
                               value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description </label>
                        <textarea class="form-control" name="description" rows="4" id="ckeditor" maxlength="100"
                                  required>{{ $post->description }}</textarea>
                    </div>
                    @can('edit-tag')
                        @php $tags = $post->tags->pluck('tag_name')->toArray() @endphp
                        <div class="form-group demo-tagsinput-area">
                            <label for="tag">Tags</label>
                            <div class="form-line">
                                <input type="text" name="tagInput" class="form-control tags-input" data-role="tagsinput" id="tag" multiple value="{{ implode(',',$tags) }}">
                            </div>
                        </div>
                    @endcan
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="modal-close" data-dismiss="modal">
                        Close
                    </button>
                    <button class="btn btn-primary" id="update-btn" data-id="{{ $post->id }}">Update Post
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
