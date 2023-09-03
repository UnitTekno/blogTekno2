<section id="create-post-bg" class="d-flex justify-content-center align-items-center container-fluid index p-5">
    <div id="create-post" class="d-flex flex-column bg-white me-3 mt-4 rounded justify-content-between">
        <div class="d-flex flex-column px-5 py-4">
            <div class="mb-4">
                <h2 class="fw-bold fs-2">Title</h2>
                <input class="w-100 bg-input-gray rounded border-0 fs-4 px-3 py-2" type="text"
                    placeholder="The title belongs here" />
            </div>

            <div class="mb-4">
                <h2 class="fw-bold fs-2">Content</h2>
                <textarea class="input-content w-100 bg-input-gray rounded border-0 fs-4 px-3 py-2" type="text"
                    placeholder="Lorem ipsum dolor sit amet" /></textarea>
            </div>

            <div class="">
                <h2 class="fw-bold fs-2">Image</h2>
                <div class="d-flex flex-row align-items-start">
                    <img class="" id="imageDisplay" src="" alt="" width="auto" height="140px">
                    <input class="" id="imageInput" type="file" onchange="loadImage(event)">
                </div>
            </div>
        </div>

        <div class="d-flex bg-post-blue justify-content-between rounded-bottom px-5 py-2 text-white">
            <div>
                <a class="text-reset text-decoration-none" href="" onclick="hideCreatePost()">
                    <h2 class="fw-bold">Cancel</h2>
                </a>
            </div>
            <div>
                <a class="text-reset text-decoration-none" href="">
                    <h2 class="fw-bold">Create</h2>
                </a>
            </div>
        </div>

    </div>

    <script>
        function loadImage(event) {
            var image = document.getElementById('imageDisplay');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

        function hideCreatePost() {
            var createPost = document.getElementById('create-post-bg');
            createPost.style.display = 'none';
        }
    </script>


</section>
