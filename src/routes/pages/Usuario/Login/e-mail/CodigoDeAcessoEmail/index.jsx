import React from 'react';
import { View, Text, TextInput, StyleSheet, Pressable, ImageBackground} from 'react-native';
import * as Animado from 'react-native-animatable';

const CodigoDeAcessoEmail = ({ navigation }) => {
  return (
    <View style={styles.container}>
        <ImageBackground
          source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
          style={styles.superiorDireito}
        />
      <View style={styles.contentContainer}>
        <Animado.View style={styles.text}>
          <Animado.Text style={styles.title} animation="fadeInRight" duration={1500}>Adicione o  {'\n'}código de acesso</Animado.Text>
          <Animado.Text style={styles.description} animation="fadeInRight" duration={1500}>
            Será enviado no seu e-mail um código de {'\n'}acesso para garantir um login seguro.
          </Animado.Text>
        </Animado.View>
        <Animado.View style={styles.inputContainer} animation="zoomIn" delay={500}>
          <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
          <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
          <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
          <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
          <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
        </Animado.View>
        <Animado.Text style={styles.esqueci} animation="fadeInRight" delay={1000}>Reenviar código</Animado.Text>
        <Animado.View style={styles.buttonColumn} animation="fadeInRight" delay={850}>
          <Pressable style={styles.button2} onPress={() => navigation.navigate('HomeUsuario')}>
            <Text style={styles.buttonText2} >Enviar</Text>
          </Pressable>
        </Animado.View>
      </View>
        <ImageBackground
          style={styles.inferiorDireito}
          source={require('../../../../../../../assets/img/cadastro/login/inferiorDireito.png')}
        />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center', // Center content horizontally
    backgroundColor: 'white',
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
    fontSize: 36,
    fontWeight: 'bold',
    width: '80%',
    textAlign: 'left',
  },
  description: {
    marginBottom: 20,
    width: '100%',
    textAlign: 'left',
    fontSize: 16,
  },
  buttonText2: {
    fontSize: 22,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  button2: {
    backgroundColor: '#E6AEB2',
    padding: 10,
    marginTop: 5,
    borderRadius: 10,
    width: 170,
    right: 20,
    height: 50,
  },
  buttonColumn: {
    flexDirection: 'row',
    width: '100%',
    justifyContent: 'flex-end',
    marginTop: 10,
  },
  inputContainer: {
    flexDirection: 'row',
    marginBottom: 20,
  },
  inputCode: {
    borderWidth: 1,
    borderRadius: 5,
    borderBottomColor: '#aaa',
    fontSize: 28,
    marginRight: 10,
    width: '15%',
    height: 70,
    textAlign: 'center',
  },
  esqueci: {
    width: 300,
    height: 50,
    alignItems: "flex-start",
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
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

export default CodigoDeAcessoEmail;
