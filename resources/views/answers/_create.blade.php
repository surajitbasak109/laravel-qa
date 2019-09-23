<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                    <hr>
                    <form action="{{ route('questions.answers.store', $question->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="body">Answer</label>
                            <textarea id="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                                name="body" rows="3"></textarea>
                            @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
