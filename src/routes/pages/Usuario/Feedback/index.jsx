import { View, Text, Pressable, Image, TextInput, Modal } from 'react-native';
import styles from '../../../../Components/Styles/Feedback/FeedbackStyle';

export default function Feedback({ navigation }) {

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/Feedback/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 175, width: 65,}}
                source={require('../../../../../assets/img/Feedback/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 123, width: 50, marginBottom: 200}}
                source={require('../../../../../assets/img/Feedback/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
        
        <View style={{paddingHorizontal: 10}}>
            <View style={{ flexDirection: 'row', alignItems: 'center'}}>
              <Pressable onPress={() => navigation.navigate('Perfil')}>
                <Image
                  style={{ height: 30, width: 30 }}
                  source={require('../../../../../assets/img/Feedback/back.png')}
                />
              </Pressable>
              <Text style={styles.titulo}>Feedback</Text>
            </View>
            <Text style={styles.texto2}>Nos ajude a melhorar a sua experiência como usuário, nos envie sugestões e nos conte das suas melhores vivencias com o Cola Aí.</Text>
        </View>
        <View style={styles.formulario}>
          <View>
            <Text style={styles.texto}>Título</Text>
            <TextInput placeholder='Título do feedback' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          </View>
          <Text style={styles.texto}>Comentário</Text>
          <TextInput 
            placeholder='Escreva sua experiência  com o aplicativo, podendo ser sugestões, criticas e melhorias' 
            multiline={true} 
            numberOfLines={6} 
            placeholderTextColor={'grey'} 
            style={styles.comentario}>
          </TextInput>
          
          <View style={{alignItems: 'flex-end'}}>
            <Pressable style={styles.enviar}>
              <Text style={{color: '#6d9eaf', fontSize: 20}}>Enviar</Text>
            </Pressable>
          </View>

        </View>
      </View> 
  );
};