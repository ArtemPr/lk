import { registerReactControllerComponents } from '@symfony/ux-react';
registerReactControllerComponents(require.context('./react/controllers', true, /\.(j|t)sx?$/));

import './source/css/tabler.css';

import './source/js/tabler'
import './source/js/demo-theme'
