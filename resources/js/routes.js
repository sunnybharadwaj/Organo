import VueRouter from 'vue-router';

import HomePage from './components/pages/HomePageComponent'
import AboutPage from './components/pages/AboutPageComponent'
import TeamPage from './components/pages/TeamPageComponent'
import EcoHabitatPage from './components/pages/EcoHabitatPageComponent'
import NaandiPage from './components/pages/NaandiPageComponent'
import EditorialPage from './components/pages/EditorialPageComponent'
import EventsPage from './components/pages/EventsPageComponent'
import SustainableLivingPage from './components/pages/SustainableLivingPageComponent'
import SchoolPage from './components/pages/SchoolPageComponent'
import GalleryPage from './components/pages/GalleryPageComponent'
import PressPage from './components/pages/PressPageComponent'
import ContactPage from './components/pages/ContactPageComponent'
import StyleGuide from './components/pages/StyleGuideComponent'
import NotFound from './components/pages/NotFoundComponent'
import GalleryAlbumComponent from './components/pages/GalleryAlbumComponent';

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
        component: EcoHabitatPage
    },
    {
        path: '/organo-at-school',
        component: SchoolPage
    },
    {
        path: '/sustainability-events',
        component: EventsPage
    },
    {
        path: '/press',
        component: PressPage
    },
    {
        path: '/gallery/album/:album',
        component: GalleryAlbumComponent,
        props: true
    },
    {
        path: '/gallery',
        component: GalleryPage
    },
    {
        path: '/contact',
        component: ContactPage
    },
    // {
    //     path: '/styleguide',
    //     component: StyleGuide
    // },
    //old links
    {
        path: '/farm-house',
        component: HomePage
    },
    {
        path: '/concepts',
        component: HomePage
    },
    {
        path: '/experience-organo',
        component: HomePage
    },
    {
        path: '/organo-at-school',
        component: HomePage
    },
    {
        path: '/our-story',
        component: HomePage
    },
    {
        path: '/blog',
        component: HomePage
    },
    {
        path: '/contact',
        component: HomePage
    },
    {
        path: '/jalam',
        component: HomePage
    },
    {
        path: '/organic-veggies-fruits',
        component: HomePage
    },
    {
        path: '/earthen-ware',
        component: HomePage
    },
    {
        path: '/garden-tools',
        component: HomePage
    },
    {
        path: '/wp-content',
        component: HomePage
    },
    {
        path: '/editorial',
        component: EditorialPage
    },
    {
        path: '*',
        component: HomePage
    }
];












const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0}
    }
});


export default router;