<template>
    <div>
        <tables-category></tables-category>
        <accessories-category></accessories-category>
        <organizers-category></organizers-category>
        <walls-category></walls-category>
        <furniture-category></furniture-category>
        <home-appliances-category></home-appliances-category>
    </div>
</template>

<script>

import TablesCategory from './categories/TablesCategory';
import AccessoriesCategory from './categories/AccessoriesCategory';
import OrganizersCategory from './categories/OrganizersCategory';
import WallsCategory from './categories/WallsCategory';
import FurnitureCategory from './categories/FurnitureCategory';
import HomeAppliancesCategory from './categories/HomeAppliancesCategory';

import store from '../store'

export default{
    store,

    components: {
        TablesCategory,
        AccessoriesCategory,
        OrganizersCategory,
        WallsCategory,
        FurnitureCategory,
        HomeAppliancesCategory
    }
}

</script>
