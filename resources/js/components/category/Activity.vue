<template>
    <div class="form-group col-md-2 mb-1">
       <select v-show="isSelected" v-model="activities" id='category' class="form-control form-control-sm rounded-sm" >
                <option v-for="activity in activities">
                        {{activities.selectedCategory}}
                </option>
        </select>
    </div>
</template>
<script>
   
export default {
    props:['selectedCategory','isSelected'],

    data () {
        return {
            activities:{
                    social: ['Enkontru Sosial','Treinamentu EJS'],
                    finance: ['Operational','Infraesturtura'],
                    technical: ['Projetu PNDS','Progressu Fiziku'],
                    other: ['Infografiku','Infografiku Nasional'],
                }
            }
            
        }
   
}
</script>