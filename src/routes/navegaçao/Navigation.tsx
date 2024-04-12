// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Usuario from '../pages/Usuario/Usuario.jsx';

import Cadastro from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Cadastro';
import Nome from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Nome';
import SobreNome from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/SobreNome';
import Email from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Email';
import CodigoDeAcessoEmailRegistro from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/CodigoDeAcessoEmail';
import Telefone from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Telefone'
import CodigoDeAcessoTelefoneRegistro from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/CodigoDeAcessoTelefone';
import Senha from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Senha';
import TelaFinal from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/TelaFinal';
import Foto from '../../routes/pages/Usuario/Register/Etapas/SegundaEtapa/Foto';
import Banner from '../../routes/pages/Usuario/Register/Etapas/SegundaEtapa/Banner';
import TelaFinal2 from '../../routes/pages/Usuario/Register/Etapas/SegundaEtapa/Telafinal2';

import LoginTelefone from '../../routes/pages/Usuario/Login/telefone';
import LoginEmail from '../../routes/pages/Usuario/Login/e-mail';
import CodigoDeAcessoEmail from '../../routes/pages/Usuario/Login/e-mail/CodigoDeAcessoEmail';
import CodigoDeAcessoTelefone from '../../routes/pages/Usuario/Login/telefone/CodigoDeAcessoTelefone';
import Register from '../../routes/pages/Usuario/Register/Etapas/PrimeiraEtapa/Cadastro';

import HomeUsuario from '../pages/Usuario/Home';
import Teatros from '../pages/Usuario/Teatros';
import Museus from '../pages/Usuario/Museus';
import Parques from '../pages/Usuario/Parques';
import Evento from '../pages/Usuario/Evento';
import Perfil from '../pages/Usuario/Perfil';
import PerfilOrg from '../pages/Usuario/PerfilOrganizazao'
import ProgramacaoCult from '../pages/Usuario/ProgramacaoCultural';
import Contato from '../pages/Usuario/Contato';
import Feedback from '../pages/Usuario/Feedback';
import Sobre from '../pages/Usuario/Sobre';
import DadosPessoais from '../pages/Usuario/DadosPessoais';
import NotifConfig from '../pages/Usuario/NotifConfig';
import Seguindo from '../pages/Usuario/Seguindo';
import Interesse from '../pages/Usuario/Interesse';
import Notificacoes from '../pages/Usuario/Notificacoes'

const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Usuario">
        <Stack.Screen name="Usuario" component={Usuario} options={{ headerShown: false }}/>

        <Stack.Screen name="Cadastro" component={Cadastro}  options={{ headerShown: false }} />
        <Stack.Screen name="Nome" component={Nome}  options={{ headerShown: false }} />
        <Stack.Screen name="SobreNome" component={SobreNome}  options={{ headerShown: false }} />
        <Stack.Screen name="Email" component={Email}  options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoEmailRegistro" component={CodigoDeAcessoEmailRegistro}  options={{ headerShown: false }} />
        <Stack.Screen name="Telefone" component={Telefone}  options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoTelefoneRegistro" component={CodigoDeAcessoTelefoneRegistro}  options={{ headerShown: false }} />
        <Stack.Screen name="Senha" component={Senha}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal" component={TelaFinal}  options={{ headerShown: false }} />
        <Stack.Screen name="Foto" component={Foto}  options={{ headerShown: false }} />
        <Stack.Screen name="Banner" component={Banner}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal2" component={TelaFinal2}  options={{ headerShown: false }} />

        <Stack.Screen name="LoginTelefone" component={LoginTelefone} options={{ headerShown: false }} />
        <Stack.Screen name="LoginEmail" component={LoginEmail} options={{ headerShown: false }} />
        <Stack.Screen name="Register" component={Register} options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoEmail" component={CodigoDeAcessoEmail} options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoTelefone" component={CodigoDeAcessoTelefone} options={{ headerShown: false }} />

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
        <Stack.Screen name="NotifConfig" component={NotifConfig}  options={{ headerShown: false }}/>
        <Stack.Screen name="Seguindo" component={Seguindo}  options={{ headerShown: false }}/>
        <Stack.Screen name="Interesse" component={Interesse}  options={{ headerShown: false }}/>
        <Stack.Screen name="Notificacoes" component={Notificacoes}  options={{ headerShown: false }}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

