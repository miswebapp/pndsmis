<template>  
    <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-2 mb-1">
                    <select id='category' class="form-control form-control-sm rounded-sm">
                        <option>-- Kategoria--</option>
                        <option>Sosial</option>
                        <option>Finansas</option>
                        <option>Teknikal</option>
                    </select>
                </div>
                <div class="form-group col-md-2 mb-1">
                    <select id='category' class="form-control form-control-sm rounded-sm">
                        <option>-- Atividade--</option>
                    </select>
                </div>
            </div>
            
            <category></category>
            	
            <div class='row'>
                <div class="form-group col-md-6 mb-0">
                    <button class="btn btn-primary  rounded-sm btn-sm ">Foti Dadus</button>
                </div>
            </div>
        </form>
</template>

<script>
import Category from './category/Category.vue';
export default {
    components: {
        'category':Category
    }
}
</script>