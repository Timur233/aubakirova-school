<?php 

    function display_self_esteem_metabox() {
        echo <<<HTML
            <div class="file-uploader">
                <input class="file-uploader__name" type="text" placeholder="Название файла">
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
                const fileUploader = document.querySelector('.file-uploader');
                const uploadButton = document.querySelector('.file-uploader__button');

                const fileInput = document.querySelector('.file-uploader__file');
                const fileNameInput = document.querySelector('.file-uploader__name');
                
                const clearForm = () => {
                    fileInput.value = '';
                    fileNameInput.value = '';
                };

                const successAlert = () => {
                    const alertEl = document.createElement('span');

                    alertEl.classList = 'file-uploader__alert';
                    alertEl.textContent = 'Файл успешно загружен';

                    fileUploader.appendChild(alertEl);

                    setTimeout(() => {
                        alertEl.remove();
                    }, 10000)
                };
                
                uploadButton.addEventListener('click', (event) => {

                    event.preventDefault();
                    event.stopPropagation();

                    const file = fileInput.files[0];
                    const fileName = fileNameInput.value;

                    if (file && fileName) {
                        let formData = new FormData();

                        formData.append('file', file);
                        formData.append('file_name', fileName);

                        fileUploader.classList.add('file-uploader--loading');

                        fetch('https://school.aubakirova.kz/wp-json/esteemfiles/v1/upload', {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                fileUploader.classList.remove('file-uploader--loading');

                                clearForm();
                                successAlert();
                            })
                            .catch(error => {
                                fileUploader.classList.remove('file-uploader--loading');

                                alert('Не удалось загрузить файл! Попробуйте снова.');
                            });
                    } else {
                        alert('Нужно заполнить форму');
                    }
                });

                fileInput.addEventListener('change', () => {
                    if (!fileNameInput.value) {
                        fileNameInput.value = fileInput.files[0].name.replace(/\.[^.]*$/, '');
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