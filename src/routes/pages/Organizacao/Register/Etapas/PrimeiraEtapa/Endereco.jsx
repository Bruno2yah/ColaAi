import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput, ImageBackground } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function SobreNome({ navigation }) {
  const [endereco, setEndereco] = useState('');
  const [numero, setNumero] = useState('');

  const handleEnderecoChange = (text) => {
    setEndereco(text);
  };

  const handleNumeroChange = (text) => {
    // Remove caracteres não numéricos
    const formattedNumero = text.replace(/[^0-9]/g, '');
    setNumero(formattedNumero);
  };

  return (
    <View style={styles.container}>
    <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
      <View style={styles.contentContainer}>

      <View style={styles.text}>
      <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o endereço da {'\n'}sua organização?</Animado.Text>
      </View>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          placeholder="Digite o endereço"
          value={endereco}
          onChangeText={handleEnderecoChange}
          />
        
        <TextInput
          style={styles.input2}
          placeholder="N°"
          value={numero}
          onChangeText={handleNumeroChange}
          keyboardType="numeric"
          maxLength={5}
          />
      </View>
      
      <View style={styles.buttonColumn}>
        <TouchableOpacity style={styles.button2}>
          <Text style={styles.buttonText2} onPress={() => navigation.navigate('Email')}>
            Prosseguir
          </Text>
        </TouchableOpacity>
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
  contentContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    width: '100%',
    bottom:100
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
  inputContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    width: '100%',
    margin:'5'
    
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '69%', // Ajuste a largura conforme necessário
    height: 50,
    left:20
  },
  input2: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '15%', // Ajuste a largura conforme necessário
    height: 50,
    right:15
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
    width: '100%',
    height: 50,
    alignItems: "flex-end",
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