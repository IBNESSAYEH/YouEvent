
<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 md:grid md:grid-cols-5 gap-4">
                    <div class="col-span-4">
                        <div class="flex justify-between mb-4">
                            <h3 class="mb-4 text-xl font-bold">View event</h3>
                        </div>
                        <div class="lg:flex items-center border-b pb-2">
                            <div class="min-w-max">
                                <h2 class="font-bold text-lg mr-4">name:</h2>
                            </div>
                            <div class="w-3/5">
                                <p>
                                    <?= $post->title; ?>
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex items-center border-b pb-2">
                            <div class="min-w-max">
                                <h2 class="font-bold text-lg mr-4">artiste:</h2>
                            </div>
                            <div class="w-3/5">
                                <p>
                                    <?= $post->slug; ?>
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex items-center border-b pb-2">
                            <div class="min-w-max">
                                <h2 class="font-bold text-lg mr-4">description:</h2>
                            </div>
                            <div class="w-3/5">
                                <p>
                                    <?= $post->body; ?>
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex items-center border-b pb-2">
                            <div class="min-w-max">
                                <h2 class="font-bold text-lg mr-4">Created:</h2>
                            </div>
                            <div class="w-3/5">
                                <p>
                                    <?= $post->created_at; ?>
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex border-b pb-2">
                            <div class="min-w-max">
                                <h2 class="font-bold text-lg mr-4">Thumbnail:</h2>
                            </div>
                            <div class="w-3/5">
                                <p>
                                    <img src="/<?= $post->thumbnail; ?>" class="mt-3" alt="" width="300" id="imgTag" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>