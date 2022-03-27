<?php get_header(); ?>

<?php  /* Template Name: questionnaire */ ?>

    <div class="container">
      <div class="questionnaire">
        <div class="questionnaire__title">Анкета</div>

        <form class="form" action="#">
          <div class="form-header">
            <h2>Запоните анкету</h2>
            <p>Мы ответим вам в ближайшее время</p>
          </div>

          <div class="block-1">
            <div class="input">
              <div class="title">ИМЯ<span>*</span></div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ФАМИЛИЯ<span>*</span></div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ДАТА РОЖДЕНИЯ<span>*</span></div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">E-MAIL<span>*</span></div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ТЕЛЕФОН</div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ЛОГИН INSTAGRAM</div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">СТРАНА</div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ГОРОД</div>
              <input type="text" />
            </div>
          </div>

          <div class="block-2">
            <div class="input">
              <div class="title">ПАРАМЕТРЫ</div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">РОСТ</div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ВЕС</div>
              <input type="text" />
            </div>
          </div>

          <div class="block-3">
            <div class="input">
              <div class="title">ЦВЕТ ГЛАЗ</div>

              <div class="select">
                <select>
                  <option value="">Черные</option>
                  <option value="">Голубые</option>
                  <option value="">Серые</option>
                  <option value="">Зелёные</option>
                  <option value="">Светло-зелёные</option>
                  <option value="">Светло-карие</option>
                  <option value="">Карие</option>
                  <option value="">Серо-голубые</option>
                  <option value="">Серо-зелёные</option>
                </select>
              </div>
            </div>

            <div class="input">
              <div class="title">ЦВЕТ ВОЛОС</div>

              <div class="select">
                <select>
                  <option value="">Темный-каштан</option>
                  <option value="">Черные</option>
                  <option value="">Пепельный</option>
                  <option value="">Блонд</option>
                  <option value="">Телесный</option>
                  <option value="">Светлый</option>
                  <option value="">Рыжый</option>
                  <option value="">Коричневый</option>
                  <option value="">Руссый</option>
                  <option value="">Брюнет</option>
                </select>
              </div>
            </div>

            <div class="input">
              <div class="title">РАЗМЕР ОБУВИ</div>

              <div class="select">
                <select>
                  <option value="">34</option>
                  <option value="">35</option>
                  <option value="">36</option>
                  <option value="">37</option>
                  <option value="">38</option>
                  <option value="">39</option>
                  <option value="">40</option>
                  <option value="">41</option>
                  <option value="">42</option>
                  <option value="">43</option>
                  <option value="">44</option>
                  <option value="">45</option>
                </select>
              </div>
            </div>

            <div class="input">
              <div class="title">РАЗМЕР ОДЕЖДЫ</div>

              <input type="text" />
            </div>
          </div>

          <div class="block-1">
            <div class="input">
              <div class="title">НАГРАДЫ И УЧАСТИЕ<span>*</span></div>
              <input type="text" />
            </div>

            <div class="input">
              <div class="title">ЗНАНИЕ ЯЗЫКОВ<span>*</span></div>
              <input type="text" />
            </div>
          </div>

          <div class="block-4">
            <div class="input">
              <div class="title">КАТЕГОРИЯ</div>
              <div class="select">
                <select>
                  <option value="">Девушки</option>
                  <option value="">Парни</option>
                  <option value="">Дети</option>
                  <option value="">Спорт</option>
                  <option value="">Инста</option>
                  <option value="">Модель+</option>
                </select>
              </div>
            </div>

            <div class="images">
              <div class="title">ФОТО</div>

              <div class="box__input">
                <div class="box__placeholder">
                  <span>Перетащите сюда файл</span>
                </div>

                <div class="box__btn">Обзор...</div>
              </div>
            </div>

            <div class="images">
              <div class="title">ФОТО</div>

              <div class="box__input">
                <div class="box__placeholder">
                  <span>Перетащите сюда файл</span>
                </div>

                <div class="box__btn">Обзор...</div>
              </div>
            </div>

            <div class="images">
              <div class="title">ФОТО</div>

              <div class="box__input">
                <div class="box__placeholder">
                  <span>Перетащите сюда файл</span>
                </div>

                <div class="box__btn">Обзор...</div>
              </div>
            </div>
          </div>

          <div class="button-to-send">
            <button>ОТПРАВИТЬ</button>
          </div>
        </form>
      </div>
    </div>

    <?php get_footer(); ?>
