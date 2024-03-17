import React from 'react';
import { View, Text,  TouchableOpacity, StyleSheet, ImageBackground} from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Cadastro({ navigation }){
  return (
    <View style={styles.container}>
          <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
        <View style={styles.contentContainer}>
        <View style={styles.text}>
          <Animado.Text style={styles.title} animation="fadeInRight" duration={1500}>Vamos começar o {'\n'}seu cadastro?</Animado.Text>
          <Animado.Text style={styles.description} animation="fadeInRight" delay={700} duration={1500}>Ao clicar em Cadastre-se, você aceita {'\n'} o Contrato do Usuário, a Política de {'\n'} Privacidade e a Política de Cookies do {'\n'} Cola Aí.</Animado.Text>
        </View>
          <Animado.View style={styles.buttonColumn} animation="fadeInRight" duration={2000} delay={1000}>
          <TouchableOpacity style={styles.button2} onPress={() => navigation.navigate('Nome')}>
            <Text style={styles.buttonText2}>Cadastre-se</Text>
          </TouchableOpacity>
          </Animado.View>
        </View>
        <ImageBackground
        style={styles.inferiorDireito}
        source={require('../../../../../../../assets/img/cadastro/login/inferiorDireito.png')}
      />
    </View>
  );
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    height: '100%',
    width: '100%',
    padding: 10,
    
  },
  contentContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    width: '100%',
    bottom:80
  },
  text:{
    width: '100%',
    alignItems: "flex-start",
    right: -20,
  },
  title: {
    fontSize: 34,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",


  },
  description: {
    marginBottom: 20,
    textAlign:"left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '##FABDC1',
    textAlign: 'center',
  },
  button1: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  },
  buttonText2: {
    fontSize: 22,
    color: "#6D9EAF",
    textAlign: "center",
  },
  button2: {
    backgroundColor: "#FABDC1",
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
  inferiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 50,
    right: 0,
    width: 200,
    height: 200,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },

  });


