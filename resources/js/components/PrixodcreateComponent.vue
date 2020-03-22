<template>
    <div>

        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label>Контрагент</label>
                    <select class="selectpicker" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                    </select>

                </div>
                <div class="col-md-6 mb-6">
                    <label>Склад</label>
                    <select class="selectpicker" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                    </select>

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <button type="button"
                            v-on:click="addAss"
                            class="btn btn-primary">Добавить</button>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover custom-table text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 70px;">п/п</th>
                                <th style="width: 140px;">Бар-код</th>
                                <th style="width: 220px;">Наименование</th>
                                <th style="width: 120px;">Кол-во</th>
                                <th style="width: 120px;">Цена</th>
                                <th style="width: 120px;">Итого</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in listass">
                                <td style="width: 70px;">п/п</td>
                                <td style="width: 140px;">Бар-код</td>
                                <td style="width: 220px;">Наименование</td>
                                <td style="width: 120px;">
                                    <input type="number" style="width: 110px;"></td>
                                <td style="width: 120px;">
                                    <input type="number" style="width: 110px;"></td>
                                <td style="width: 120px;">
                                    <input type="number" style="width: 110px;"></td>
                            </tr>

                            </tbody>
                        </table>
                        <hr>
                        <h4>Итого : <input class="form-control" type="text" readonly></h4>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="button">Создать приход</button>

        </form>
    </div>
</template>

<script>
    export default {
        name: "PrixodcreateComponent",
        data() {
            return {
                listass:[],
            }
        },
        methods: {
          addAss:function () {
              this.listass.push({
                  id: 2,
                  addbar:3,
                  addname:"Название товара",
                  addcount:3,
                  addprice:4,
                  addsum:3*4,
              });
          }
        },
    }
</script>

<style scoped>
    .custom-table> tbody {
        display:block;
        height:450px;
        overflow:auto;
    }
    .custom-table> thead, tbody tr {
        display:table;
        width:100%;
    }
    .custom-table> thead {
        width:   100%
    }
    .custom-table {
        width:100%;
    }

</style>
