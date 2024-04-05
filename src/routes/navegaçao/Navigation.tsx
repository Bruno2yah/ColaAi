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
import Perfil from '../pages/Usuario/Perfil';
import PerfilOrg from '../pages/Usuario/PerfilOrganizazao'
import ProgramacaoCult from '../pages/Usuario/ProgramacaoCultural';
import Contato from '../pages/Usuario/Contato';
import Feedback from '../pages/Usuario/Feedback'
import Sobre from '../pages/Usuario/Sobre'
import DadosPessoais from '../pages/Usuario/DadosPessoais'

const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="ColaAi" component={ColaAi} options={{ headerShown: false }}/>
        <Stack.Screen name="Organizacao" component={Organizacao} options={{ headerShown: false }}/>
        <Stack.Screen name="Usuario" component={Usuario} options={{ headerShown: false }}/>
        <Stack.Screen name="AcessoSemLogin" component={HomeUsuario} options={{ headerShown: false }}/> 

        <Stack.Screen name="HomeUsuario" component={HomeUsuario} options={{ headerShown: false }}/>
        <Stack.Screen name="Teatros" component={Teatros} options={{ headerShown: false }}/>
        <Stack.Screen name="Museus" component={Museus} options={{ headerShown: false }}/>
        <Stack.Screen name="Parques" component={Parques} options={{ headerShown: false }}/>
        <Stack.Screen name="Evento" component={Evento} options={{ headerShown: false }}/>
        <Stack.Screen name="Perfil" component={Perfil}  options={{ headerShown: false }}/>
        <Stack.Screen name="PerfilOrganizacao" component={PerfilOrg} options={{ headerShown: false }}/>
        <Stack.Screen name="ProgramacaoCultural" component={ProgramacaoCult} options={{ headerShown: false }}/>
        <Stack.Screen name="Contato" component={Contato}  options={{ headerShown: false }}/>
        <Stack.Screen name="Feedback" component={Feedback}  options={{ headerShown: false }}/>
        <Stack.Screen name="Sobre" component={Sobre}  options={{ headerShown: false }}/>
        <Stack.Screen name="DadosPessoais" component={DadosPessoais}  options={{ headerShown: false }}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

