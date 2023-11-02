<?php 

    function display_self_esteem_metabox() {
        echo <<<HTML
            <div class="file-uploader">
                <input class="file-uploader__name" type="text" placeholder="Название файла">
                <label for="input-file">
                    <span class="file-uploader__label">Выбирите файл</span>
                    <input class="file-uploader__file" id="input-file" type="file" style="display: none">
                </label>
                <button class="file-uploader__button">Загрузить</button>
            </div>
            <div class="file-list">

            </div>

            <script>
                const fileUploader = document.querySelector('.file-uploader');
                const uploadButton = document.querySelector('.file-uploader__button');

                const fileInput = document.querySelector('.file-uploader__file');
                const fileInputLabel = document.querySelector('.file-uploader__label');
                const fileNameInput = document.querySelector('.file-uploader__name');
                
                const clearForm = () => {
                    fileInput.value = '';
                    fileNameInput.value = '';
                    fileInputLabel.textContent = 'Выбирите файл';
                };

                const cleanString = (inputString) => {
                    let cleanedString = inputString.replace(/[^\w\sа-яА-Я]/g, '');

                    cleanedString = cleanedString.replace(/\s+/g, '_');

                    return cleanedString;
                }

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
                        formData.append('file_name', cleanString(fileName));

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
                        fileNameInput.value = cleanString(fileInput.files[0].name.replace(/\.[^.]*$/, ''));
                        fileInputLabel.textContent = fileInput.files[0].name;
                    }
                });
            </script>
            <style>
                .file-uploader {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 12px;
                    padding: 12px;
                    background: #f1f1f1;
                    border: 2px dashed #7f7f7f;
                    border-radius: 5px;
                    position: relative;
                }

                .file-uploader__alert {
                    position: absolute;
                    right: 12px;
                    top: 12px;
                    background: rgb(0 128 0 / 84%);
                    padding: 7px 20px;
                    color: #fff;
                    border-radius: 3px;
                }

                .file-uploader__name {
                    border-radius: 0px !important;
                    text-align: center;
                }

                .file-uploader__button {
                    background: #2271b1;
                    color: #fff;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 4px;
                    -webkit-appearance: none;
                    line-height: 1;
                    user-select: none;
                    transition: all .25s;
                    cursor: pointer;
                }

                .file-uploader__button:hover {
                    background: #165283;
                }
            </style>
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