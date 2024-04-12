import React from 'react';
import { View, Text,  Pressable, StyleSheet, TextInput, ImageBackground } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Nome({ navigation }) {
  return (
    <View style={styles.container}>
       <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
        <View style={styles.contentContainer}>
        <View style={styles.text}>
          <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o seu Nome?</Animado.Text>
        </View>
          <TextInput
            style={styles.input}
            placeholder="Digite o seu Nome"
            onChangeText={(text) => setEmail(text)}
          />
          <View style={styles.buttonColumn}>
          <Pressable style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('SobreNome')}>Prosseguir</Text>
          </Pressable>
          </View>
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
  title: {
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",


  },
  text:{
    width: '100%',
    alignItems: "flex-start",
    right: -20,
  },
  contentContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    width: '100%',
    bottom:80
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
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '90%',
    height: 50,
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


