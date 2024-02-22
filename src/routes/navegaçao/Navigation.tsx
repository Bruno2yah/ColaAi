// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Organizacao from '../pages/Organizacao/index';
import Usuario from '../pages/Usuario/index';
import ColaAi from '../pages/ColaAi';

import HomeUsuario from '../pages/Usuario/Home';
import Teatros from '../pages/Usuario/Teatros';
import Museus from '../pages/Usuario/Museus';
import Parques from '../pages/Usuario/Parques';
import Evento from '../pages/Usuario/Evento';

const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="ColaAi" component={ColaAi} options={{ headerShown: false }}/>
        <Stack.Screen name="Organizacao" component={Organizacao} options={{ headerShown: false }}/>
        <Stack.Screen name="Usuario" component={Usuario} options={{ headerShown: false }}/>
        <Stack.Screen name="AcessoSemLogin" component={HomeUsuario} options={{ headerShown: false }}/> 

        <Stack.Screen name="HomeUsuario" component={HomeUsuario} />
        <Stack.Screen name="Teatros" component={Teatros} />
        <Stack.Screen name="Museus" component={Museus} />
        <Stack.Screen name="Parques" component={Parques} />
        <Stack.Screen name="Evento" component={Evento} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

