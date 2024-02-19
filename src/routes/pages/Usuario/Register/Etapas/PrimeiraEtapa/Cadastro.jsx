import React from 'react';
import { View, Text,  TouchableOpacity, StyleSheet } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Cadastro({ navigation }){
  return (
    <View style={styles.container}>
        <View style={styles.container}>
          <Animado.Text style={styles.title} animation="bounceInDown" duration={1500}>Vamos começar o seu cadastro?</Animado.Text>
          <Animado.Text style={styles.description} animation="bounceInUp" delay={700} duration={1500}>Ao clicar em Cadastre-se, você aceita o Contrato do Usuário, a Política de Privacidade e a Política de Cookies do Cola Aí.</Animado.Text>
          <Animado.View style={styles.buttonColumn} animation="flipInY" duration={2000} delay={1000}>
          <TouchableOpacity style={styles.button2} onPress={() => navigation.navigate('Nome')}>
            <Text style={styles.buttonText2}>Cadastre-se</Text>
          </TouchableOpacity>
          </Animado.View>
        </View>
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
  title: {
    fontSize: 24,
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

  });


