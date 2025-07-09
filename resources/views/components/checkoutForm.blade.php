<form action="">
    @csrf
    <div class="formContainer">
        <div class="formLeftSide">
            <div class="userContacts box">
                <h6>Контакти замовника</h6>
                <div class="userData">
                    <div>
                        <label htmlFor="lastName">Прізвище</label>
                        <input type="text" placeholder="Введіть прізвище" name="lastName" />
                    </div>
                </div>
            </div>
            <div class="deliveryInfo box">
                <h6>Доставка</h6>
            </div>
            <div class="methodsContact box">
                <h6>Зручний метод зв'язку</h6>
            </div>
        </div>
        <div class="formRightSide box">
            <h6>Передзамовлення</h6>
        </div>
    </div>
</form>