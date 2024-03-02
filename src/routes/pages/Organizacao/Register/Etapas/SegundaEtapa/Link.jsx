import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput, ImageBackground } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Link({ navigation }) {
  const [Link, setLink] = useState('');

  const formatLink = (text) => {
    // Remove non-numeric characters
    const numericOnly = text.replace(/\D/g, '');

    // Format Link: 11.222.333/0001-44
    const formattedLink = numericOnly.replace(
      /^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/,
      '$1.$2.$3/$4-$5'
    );

    // Update the state with the formatted Link
    setLink(formattedLink);
  };

  return (
    <View style={styles.container}>
       <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
      <View style={styles.contentContainer}>
        <View style={styles.text}>
        <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o link do site da sua organização?</Animado.Text>
        <Animado.Text style={styles.description} animation="zoomIn" duration={800}>Coloque o link atualizado da sua página web para assim os usuários buscarem informações detalhadas ou formas de contato.</Animado.Text>
        </View>
        <TextInput
          style={styles.input}
          placeholder="Digite ou cole o link aqui"
          value={Link}
          onChangeText={(text) => formatLink(text)}
          maxLength={18} 

        />
        <View style={styles.buttonColumn}>
          <TouchableOpacity style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('TelaFinal2')}>
              Prosseguir
            </Text>
          </TouchableOpacity>
        </View>
      <View style={styles.buttonPular}>
        <TouchableOpacity onPress={() => navigation.navigate('TelaFinal2')}>
          <Text style={styles.linkText}>adicionar mais tarde</Text>
        </TouchableOpacity>
      </View>
      </View>
      <ImageBackground
        style={styles.inferiorEsquerdo}
        source={require('../../../../../../../assets/img/cadastro/login/InferiorEsquerda.png')}
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
    bottom: 80
  },
  text:{
    width: '100%',
    alignItems: "flex-start",
    right: -20,
  },
  title: {
    fontSize: 30,
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
  linkText: {
    fontSize: 20,
    color: 'blue',
    marginTop: 10,
    bottom:10,
    left:10
  },
  buttonPular: {
    justifyContent: 'flex-end',
    alignItems: 'center',
    width: '100%',
    height: '100%',
    position: 'absolute',
    bottom: 20,
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '90%',
    height: 50,
  },
  inferiorEsquerdo: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 100,
    left: -20,
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


