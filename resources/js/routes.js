import VueRouter from 'vue-router';

import HomePage from './components/pages/HomePageComponent'
import AboutPage from './components/pages/AboutPageComponent'
import TeamPage from './components/pages/TeamPageComponent'
import EcoHabitatPage from './components/pages/EcoHabitatPageComponent'
import NaandiPage from './components/pages/NaandiPageComponent'
import SustainableLivingPage from './components/pages/SustainableLivingPageComponent'
import SchoolPage from './components/pages/SchoolPageComponent'
import GalleryPage from './components/pages/GalleryPageComponent'
import PressPage from './components/pages/PressPageComponent'
import ContactPage from './components/pages/ContactPageComponent'
import StyleGuide from './components/pages/StyleGuideComponent'
import NotFound from './components/pages/NotFoundComponent'


let routes = [
    {
        path: '/',
        component: HomePage
    },
    {
        path: '/company',
        component: AboutPage
    },
    {
        path: '/team',
        component: TeamPage
    },
    {
      path: '/eco-habitats',
      component: EcoHabitatPage
    },
    {
        path: '/naandi',
        component: NaandiPage
    },
    {
        path: '/sustainable-living',
        component: SustainableLivingPage
    },
    {
        path: '/organo-at-school',
        component: SchoolPage
    },
    {
        path: '/press',
        component: PressPage
    },
    {
        path: '/gallery',
        component: GalleryPage
    },
    {
        path: '/contact',
        component: ContactPage
    },
    {
        path: '/styleguide',
        component: StyleGuide
    },
    {
        path: '*',
        component: NotFound
    }
];

export default new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0}
    }
});