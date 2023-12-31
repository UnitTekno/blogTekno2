<div class="card dashed-border mb-3" style="max-width: 576px; min-height:150px">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card" style="min-height:180px; border:none">
                <p class="card-body card-text"><i>{{ $post->category ?? 'Category #1' }}</i></p>
                <div class="card-body align-bottom mt-auto">
                    <h2 class="fw-bold">{{ $post->title ?? 'Suggested post\'s title belongs here' }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <img src="{{ $post->image ?? asset('/assets/beach-hd.jpg') }}" class="img-fluid rounded-end" alt="..."
                style="height:180px">
        </div>
    </div>
</div>
