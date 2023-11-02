<?php 

    function display_self_esteem_metabox() {
        echo <<<HTML
            <div class="file-uploader">
                <input class="file-uploader__file" type="file">
                <button class="file-uploader__button">Загрузить</button>
            </div>
            <div class="file-list">

            </div>

            <style>
                .file-uploader {
                    background-color: red;
                }
            </style>
            <script>
                const uploadButton = document.querySelector('.file-uploader__button')
                
                uploadButton.addEventListener('click', (event) => {

                    event.preventDefault();
                    event.stopPropagation();

                    const fileInput = document.querySelector('.file-uploader__file');
                    const file = fileInput.files[0];

                    if (file) {
                        let formData = new FormData();
                        
                        formData.append('file', file);
                        formData.append('file_name', 'test');

                        console.log(formData);

                        fetch('https://school.aubakirova.kz/wp-json/esteemfiles/v1/upload', {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                console.log('Файл успешно загружен:', data);
                            })
                            .catch(error => {
                                console.error('Произошла ошибка при загрузке файла:', error);
                            });
                    } else {
                        console.error('Выберите файл для загрузки.');
                    }
                });
            </script>
        HTML;
    }

    function self_esteem_metabox() {
        global $post;

        if (is_admin() && $post && get_page_template_slug($post) === 'page-self_esteem.php') {
            remove_post_type_support('page', 'editor');
            remove_meta_box('postimagediv', 'page', 'side');

            add_meta_box('self_esteem_metabox', 'Список файлов', 'display_self_esteem_metabox', 'page', 'normal', 'high');
        }
    }

    add_action('add_meta_boxes', 'self_esteem_metabox');

?>