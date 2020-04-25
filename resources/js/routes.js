import Home from './components/pages/Home'
import Vard from './components/pages/Vard'
import Sport from './components/pages/Sport'
import Skonhet from './components/pages/Skonhet'
import Mat from './components/pages/Mat'

export default {
    mode: 'history',

    routes: [
      {
        path: '/',
        component: Home,
        name: 'home'
      },
      {
        path: '/skonhet',
        component: Skonhet,
        name: 'skonhet'
      },
      {
        path: '/vard',
        component: Vard,
        name: 'vard'
      },
      {
        path: '/sport',
        component: Sport,
        name: 'sport'
      },
      {
        path: '/mat',
        component: Mat,
        name: 'mat'
      }
    ]
}